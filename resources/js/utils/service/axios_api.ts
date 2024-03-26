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
export const useAxiosRequestApiQkb = (token?:string,baseurl:string="quickbooks.api.intuit.com",realm:number  = 9341451930708145,query?:String) : AxiosInstance  =>{
    const useAxios: AxiosInstance = axios.create({
        baseURL               : `https://${baseurl}/v3/company/${realm}/}`,
        headers   : {
          accept: 'application/json',
          "Content-type"      :   "application/json",
          "X-Requested-With"  :   "XMLHttpRequest",
          "Authorization"     :   `Bearer ${token}`
        },
      })
      return useAxios
}