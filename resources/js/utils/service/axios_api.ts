import axios, { type AxiosInstance } from "axios";
//https://www.jstoolset.com/jwt
export const useAxiosRequestWithToken = (token:string = "",baseurl:string="quickbook.drapeauyamboka.com") : AxiosInstance  =>{
    const useAxios: AxiosInstance = axios.create({
        baseURL               : `https://${baseurl}/api`,
        headers   : {
          accept: 'application/json',
          "Content-type"      :   "application/json",
          "X-Requested-With"  :   "XMLHttpRequest",
          "Authorization"     :   `Bearer ${token}`
        },
      })
      return useAxios
}
export const useAxiosRequestApiQkb = (token?:string,baseurl:string="quickbooks.api.intuit.com",realm:number  = 9341451930708145) : AxiosInstance  =>{
    const useAxios: AxiosInstance = axios.create({
        baseURL               : `https://${baseurl}/v3/company/${realm}/`,
        headers   : {
          accept: 'application/json',
          "Content-type"      :   "application/json",
          "X-Requested-With"  :   "XMLHttpRequest",
          "Authorization"     :   `Bearer ${token}`
        },
      })
      return useAxios
}



export const useAx = (baseurl:string="quickbook.drapeauyamboka.com") : AxiosInstance  =>{
  const useAxios: AxiosInstance = axios.create({
      baseURL               : `https://${baseurl}/v3/company/9341451930708145`,
      headers   : {
        accept: 'application/json',
        "Content-type"      :   "text/plain",
        "X-Requested-With"  :   "XMLHttpRequest",
        "Authorization"     :   "Bearer eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..Agk2E7kidqlpyRYuVJAIuA.5EJrASXiFNV7AaQ4zw9FwPEi6dt6VC_3Igi1XHkbFyOaK6AzV9okmSIVsnDmXoPHf3EdCyYjrZtBrj9dQTYIQUWdfn90W8UlpVoEaLUwsgImJizA6o64n7RNflcySacdl1IMFHm3RrvRschUu54SJLhvoPdM0JHcOJI7JZMJFMLb9ZVRoWr9JHyLqIqqyDPutKZdpCcGZq2QoNW623m3QxVBu-1sUKHC1cvnbsIkP5WLmnO7umU5C95UBH5W7knRtUsDGI-q8yFSfl7Y5-dihLH5veacCkuLK1Kpv_J2IVNx5hxbt8HCmThhNofgI3kaVY_HEzxhe98z9VIsyXxKh9vnQ8J-Hix5ZF07SRcZAhNqX733LVYpHXEbVDNxuZZ6o1Y3k6kjmyy7VX8HCk2qDTI86AOcgRzc150O-UbzqxAGc_3BKIAOMmxuqKnVZYnh355ZfVTHZOt83ROCGc-MouAZQq-Lfq4UOZ2Fr837hcm9RoNQ8TtaVAhLhVHv9Pb7oOiS9mTaMpMxZT4nSGYNW1nBN8G5SVT1nJhx1ATOIXYhFOZiCSYckzgJFytYTlJ9IxWGq-qoFUcXWjgLe4ZfhmSMgm6U5jBXfgpFG2a5eMOxpD9ckHmdst_8WuPqxgEYEv2MHJgFcXW-AdaAYOEKajeK-XQwr3pdYuOoT4lss3Rm4QZjsOOWRFcAHWxhGpLzawH16NexhBX9DCsF1OBfZX2ESyFtsJzR8eyZharqh0IOWrOhbZNHHeFItytkxidE.uaJtG_ge0Gbb8pwFTckm4Q",
      },
    })
    return useAxios
  }
//   (async()=>{
//     await useAx().post("/query?minorversion=70","select * from employee startposition 1 maxresults 5")
//         .then(function (response) {
//             console.log("response -> ",response)
//     })
//     .catch(function (error) {
               
//     })
// })()