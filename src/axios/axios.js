import axios from 'axios';
import packageJson from '../../package.json';
import Cookies from 'js-cookie';

export default axios.create({
  baseURL: packageJson.completePath +'/api/',
  headers:{
    Authorization : Cookies.get('jwt'),
  },
  options:{
    FullPath: '', // path to the file after  -- api/src
    RMethod: '', // file name or function Requested -- must be with in components
    AllowOptions: true, // if it true, functions in api will must accept it
    AllowHeaders: true // if it true, functions in api will must accept it

  },

  params: {}

});


// example of post


// axios.post('get',{
//   options:{
//     RequestedMethod: 'default'
//   },
//   params: this.state.items
// })
// .then( res => {
//   this.setState({items: res.data});
//   console.log(this.state.items)
// });
// }
