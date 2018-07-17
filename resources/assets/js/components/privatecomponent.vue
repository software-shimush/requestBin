<template>
    <div>
    <p>this is my private request channel</p>
     <div v-for="http in myrequests" >
    
    
    <ul v-for="(value,key) in http">
    <li> {{  value }} </li>
   </ul>
     
    </div>
    </div>
    
</template>

<script>
  export default {
    props: [ 'myrequests']
  };
  
</script>