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
      // baseURL               : ``,
      headers   : {
        accept: 'application/json',
        "Content-type"      :   "application/text",
        "X-Requested-With"  :   "XMLHttpRequest",
        "Authorization"     :   "Bearer eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..UFV3k2WVBU9N7LlpZHHK1w.LPnbWUV6tzt5CUJVGKPME9PxCo84K7nwztPfv1RMVmi9izjKo7y2jksvJBXxGZ_8185mgebN_ox5JIsv5PWSzJLygsYtsfEy3jYkTdRFLftx5EnzGeODAVPAvSgVPGt4zQuD744RyUC0lWuV4rRRK8Ckwzil7NIXrBUHYLyjjCiMRFUAnqMP99t26IQ12zkdpuQvbpXiFx4NfTaqo1c6fasUfpOPJMZvvFerVX-X0uVGyqYkie69FsiOQQJQaEVz0oRMMSYtvFbvkHFyM1otC06yAGzT9DbvewTB6D0ZUtgBEZIZi7AXSKJ49I-IIL1usPbEvBDTXH1OV1eLpHEFsp0AstHAaQB0Ow-LFIGWTP4-0khJRqTAwXbkM43e8zpnj3SenO2poAIlRnmf6vhQHf6riYkxgKmPKw0jxiB5skqvx3aLaWK3GjGnW5ZGc7W2ikPlAFbMPK-r1V1iMBEOdcDAxPmDj0HPnmTRjghHV5NmDYjaag2p2SlWkoTDJtDJ9cHaUNkasdgX2R7A5ZJftEjR_Rde3rgMjiEqqERQc8K60wESFk_iqfPX3JeAHLW_XPmpKfPsllW3e9Z2hlnQDdVr3Z3RuYRDk1endhPo__Pn7vfWAein75xJ9RcrtMbgRINBXOlo8JQ0E0-m9DxjsXs84JTjelWxvaV3NEzPtwicepMgCtHCVrBHhO1NNe03VyF4kZu9fjLgy_Iet2ly5sFbwCCXibusU7aFnKtZ_C32hh8D6feCd7pnQ8zdQnNW.2dtHH-BIzR2OUxwMFsQiLw",
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