

@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover"> 
<tr>
    
    <th>Domain</th>
    <th>Method</th>
    <th>Url</th>
    <th>Request Body</th>
    <th>Query Keys</th>
    <th>Query Value</th>
    <th>Headers</th>
    <th>Delete</th>
    
    
</tr>

@foreach ($requests as $request)


 
  <tr id='row<?php echo $request['id'];?>'>
  
  <td><?php echo $request['url_id']; ?> </td>
 <td><?php echo $request['method']; ?> </td>
 <td><?php echo $request['url_content']; ?> </td>
 <td><?php echo $request['request_body']; ?> </td>
 <td><?php echo $request['query_keys']; ?> </td>
 <td><?php echo $request['query_values']; ?> </td>
 <td> <a href= "headers/<?php echo $request['id'];?> " > <button class="btn btn-info" type="submit" name="submit" id="<?php echo $request['id'];?>"  value="">VIEW HEADERS</button></a></td>
 <td> <button class="btn btn-info delete" type="submit" name="submit" id="<?php echo $request['id'];?>" value="">Delete</button></td>

@endforeach
</table>


<script>
$(document).ready(function(){
    $(".delete").click(function(){
        $.ajax({url: "/delete/"+this.id, success: function(result){
            $("#row"+this.id).remove();
            console.log(result);
        }});
    });
});

</script>

@endsection


