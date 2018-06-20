@extends('layouts.app')
@section('content')
<table> 
<tr>

    <th>Domain</th>
    <th>Headers</th>
    <th>Method</th>
    <th>Url</th>
    <th>Request Body</th>
    <th>Query Keys</th>
    <th>Query Value</th>
</tr>

@foreach ($requests as $request)



 
  <tr>
  <td><?php echo $request['url_id']; ?> </td>
  <td><?php echo $request['headers']; ?> </td>
 <td><?php echo $request['method']; ?> </td>
 <td><?php echo $request['url_content']; ?> </td>
 <td><?php echo $request['request_body']; ?> </td>
 <td><?php echo $request['query_keys']; ?> </td>
 <td><?php echo $request['query_values']; ?> </td>
</tr>
@endforeach
</table>
@endsection


