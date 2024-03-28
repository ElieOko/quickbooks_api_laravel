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

//https://quickbooks.api.intuit.com/v3/company/9341451930708145/query?query=SELECT%20*%20FROM%20Invoice
export const useAx = (token? :string) : AxiosInstance  =>{
  const useAxios: AxiosInstance = axios.create({
      baseURL               : `https://quickbooks.api.intuit.com/v3/company/9341451930708145`,
      headers   : {
        accept: 'application/json',
        "Content-type"      :   "application/text",
        "X-Requested-With"  :   "XMLHttpRequest",
        "Authorization"     :   "Bearer ",
        "Access-Control-Allow-Origin":"https://quickbook.drapeauyamboka.com/",        
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