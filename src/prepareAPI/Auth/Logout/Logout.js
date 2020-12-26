import axios from 'axios/axios';

const Logout = () => {

  axios.post('init',{
    options:{
      FullPath: 'auth/main',
      RMethod: 'Logout',
    },

  })
  .then( res => {
    console.log(res);
    window.location.replace('http://'+res.data.params);
  });
};


export default Logout;
