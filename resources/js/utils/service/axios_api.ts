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
        "Authorization"     :   "Bearer eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..0sFkXSRY1w73QLwQFKNR8A.xjoc11I3ulbEr7TZd6zc_ZvlqVCsCIeiRIKjILZPbODJC5BT29U6MUWlU0lVucR-sWx00t0Dz2LYZgeasC_xHRXIubbLVjnZs8qBFQM2rHetlFiVFWWsOoyWH4NjWvzgjuL1ul66CqFqPLvOpYcaCA_t-U2Xxo_-wBkwx4RRpqU8SLbnkC_zwz_mDK0tmrpnRcSvYsRcVnzx--rrSSa0H9LpvWA5E-wvI-EliVj4U3CgCgAnAj6gDWayMWCRrBC_XC84wTvGdixe_U5G1_s-IaMvfVaEndzNygSfin-3mSNuaBTlVPRUPZfmVROaZpwWhcRVc_GFUTWMsG6kIUrB2gKsteBHU2ce6NWrr8a4xZx3TWwNvzKnHFxe3S7C6yOv6ZKqlTo8svrmDLQ443LDI1d3IrlM1UBtGnc4e-YQSQp6KqYg2GW3VysOoaIifg8APWZWUcde3sSATskgRog65PjSGasLxhPpHzn-5Ge0-pOacH1_ggh0RbeRvhJaHoi_WWptkFT9_jJswIaEiuGX0MN5MTpdP5NrQS5hHZDfPE2rgriT_-mW2TZxirBdpdt_rAvQB28tF1v3y1MZvcCoAH4m9FkWMEbIfN0V_MvPiSdddLwrjIFq0V-OXRyWFIjNrDvmmJZB2oIW92dRxgisiSl-n3hQsrxUFSFqry9-lIeBVgjO4m-_PaN6NJ5kny_83v_v3rE0wMNHG1dBnzb_zTg_lZWKkb4LlXZmFhDoDxDvDdCITUUP-8kgIY7VZNgl.HaSXpAPgJtrQ5Y0X4bqJHA",
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