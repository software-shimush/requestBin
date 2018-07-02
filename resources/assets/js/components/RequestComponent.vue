<template>
    <ul>
        <li class="left clearfix" v-for="request in requests">
                <p> URL:
                    {{ request.server.parameters.SERVER_NAME }}
                </p>
                
                <p> Method:
                    {{ request.server.parameters.REQUEST_METHOD }}
                </p>
                <p> Query Parameters:
                    {{ request.query.parameters }}
                </p>
               <p> Request Body:
                    {{ request.request.parameters }}
                </p>
                <p> Time:
                    {{ request.server.parameters.REQUEST_TIME }}
                </p>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['requests']
  };
</script>