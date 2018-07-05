Vue.component('request-listener', {
  data: function () {
    return {
      request: []
    }
  },
  template: 
        <ul >
                <li> URL:
                    {{ request }}
                </li>
                </ul>
                
})

<ul v-for= "http in requests" >
         <li>
            method:   {{http.method}}
          </li>
            <li >
             URL:   {{http.url}}
          </li>
          <li >
             query:   {{http.query}}
          </li>
           <li >
             request body:   {{http.post}}
          </li>