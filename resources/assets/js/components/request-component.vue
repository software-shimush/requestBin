<template>
    <div>
    <div v-for="http in requests" >
    
    <table >
    <tr v-for="(value, key) in http">
    <th>{{ key }}</th>
    </tr>
    <tr v-for="(value, key) in http">
    <td> {{ value }} </td>
       </tr> 
   </table>
    </div>
    </div>
</template>

<script>
  export default {
    props: ['requests']
  };
  
</script>