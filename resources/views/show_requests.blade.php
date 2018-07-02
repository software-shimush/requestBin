

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
    <th>Time</th>
    <th>Headers</th>
    <th>Delete</th>
    
</tr>

@foreach ($requests as $request)


 
  <tr class="trow">
  <td><?php echo $request['url_id']; ?> </td>
 <td><?php echo $request['method']; ?> </td>
 <td><?php echo $request['url_content']; ?> </td>
 <td><?php echo $request['request_body']; ?> </td>
 <td><?php echo $request['query_keys']; ?> </td>
 <td><?php echo $request['query_values']; ?> </td>
 <td><?php echo $request['created_at']; ?> </td>
 <td> <a href= "headers/<?php echo $request['id'];?> " > <button class="btn btn-info" type="submit" name="submit" id="<?php echo $request['id'];?>"  value="">VIEW HEADERS</button></a></td>
 <td> <button class="btn btn-info delete" type="submit" name="submit" id="<?php echo $request['id'];?>" value="">Delete</button></td>
</tr>
@endforeach
</table>


<script>
$(document).ready(function(){
    var deleteButton=$(".delete");
    deleteButton.click(function(event){
        $.ajax({url: "/delete/"+this.id, success: function(){
            $(event.target).closest('.trow').remove();
        }});
    });
});

</script>

@endsection


