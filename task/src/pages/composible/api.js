import Axios from 'axios';
const RESOURCE_NAME = 'http://127.0.0.1:8000/api';

export default{
     
      login(data) {
        return Axios.post(`${RESOURCE_NAME}/login`, data);
      },

      register(data) {
        return Axios.post(`${RESOURCE_NAME}/register`, data);
      },

     customerall() {
        return Axios.get(`${RESOURCE_NAME}/customerlist`);
      },
      customer(data) {
        return Axios.post(`${RESOURCE_NAME}/customerstore`, data);
      },
      billall() {
        return Axios.get(`${RESOURCE_NAME}/billlist`);
      },
      bill(data) {
          return Axios.post(`${RESOURCE_NAME}/billstore`, data);
      },

      billdelete(id) {
        return Axios.get(`${RESOURCE_NAME}/billdelete/${id}`);
      },
      
}
