<template>
    <div>
    <div v-for="http in requests" >
    
    
    <ul v-for="(value,key) in http">
    <li> {{  value }} </li>
   </ul>
     
    </div>
    </div>
    
</template>

<script>
  export default {
    props: ['requests']
  };
  
</script>