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
      baseURL               : `https://quickbooks.api.intuit.com/v3/company/9341451930708145/query?minorversion=70`,
      headers   : {
        accept: 'application/json',
        "Content-type"      :   "application/text",
        "X-Requested-With"  :   "XMLHttpRequest",
        "Authorization"     :   "Bearer eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..8b24Vm-LQ0BezroMCQT_xQ.V93xaJL7NKpLWNk6gmgEvqbpbxw5wqIEBoAFm9Ync-F8LSDEGQgJ4XJzYGfHaU5rlAg4YrpLtVTzGVg-xi6977W7fhYWAoHUJq5LB5DDnmHhyx1e18mmYpCYLQ-bw9l1eWdeV8xwskMrYA7k1holUIs_aEiPciGQ1twVXgZfkFsqYIpOiHuG2WVKQV4BETxeHxO9pqRBa7SxXiTx5Vtkj9nOIMFARwU4tZmPIenauyuN0DCPXj6qHSZOLw9fVCU6vOxo8XHM1xIjMcTSj8ig6LrcUNiO9yDz3ez6VZayEajVlVLkArR-WSCNzm5MYXPcrqcd8liV9IeS1d2QStor0c_bQwQBSIZvxcOkQk3Uuj_bx2ZA69MGoW0xd-8lwWM_SLE1Ep-BlxYQUbp2jwUKYZE64FeSTu4Z_wFMEIkVC0vKLVBlZM3XI3jc48aUos0yG5Kj9da6Ocnpa1VDTHK-4Jz2gpMHnJxkUHiyuZk3JMQymKMcalKDZ_HYi-AP3IRyXpjd4X7h3kBwCEf6mYJkBdG7LSJNEcigeo4aSCn9iirqJuHHjB0VyMUNlQsCWV8ok9CM53XrClMhvrAndnVu4EPkoj7J4ocDNMeGm3GqxkiThekdabT1vaLzhQjMHFg3-9k-Fh6EJao0L5_LvmSgmZgq-88EQN2xeNRd_K5-vWaXJNPoQUl9j_J3ozDSNc6CZpVvz_kM6H5ZPqoLs4Ux4kt0DCdANiELtTw26djRuhm9RO794k6FamENedrWPWkc.VFk-F1NQL1eShQHgmeT1pw",
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