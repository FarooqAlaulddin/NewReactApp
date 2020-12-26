import axios from 'axios/axios';
//import Cookies from 'js-cookie';

async function IsLoggedIn() {
      // //console.log('IsLoggedIn Before calling api: ' + this.state.IsLoggedIn)
      //  let promise =
      let res = await axios.post('init',{
        options:{
          FullPath: 'auth/main',
          RMethod: 'IsLoggedIn',
        },
      })
      // .then( res => {
      //   console.log('IsLoggedIn After calling api: ' + res.data.params);
      //   return res.data.params;
      // });
      // return (promise); // "done!"
      //if(Cookies.get('loggedIn')){return true;}
      return res.data.params;
}


// Auth_IsLoggedIn().then((value) => {
//   this.setState({IsLoggedIn: value.data.params});
// })

export default IsLoggedIn;
