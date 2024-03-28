import { ICurrencyRef } from "../currency/ICurrency"
import { ILineStandard } from "../line/ILineStandar"
import { IMetaData } from "../other/IOther"

export interface IBill{
    Id?:Number
    SyncToken: String, 
    domain: String, 
    APAccountRef: {
      name?: String, 
      value?: Number
    }, 
    VendorRef?: {
      name: String, 
      value: Number
    }, 
    TxnDate: String, 
    TotalAmt: Number, 
    CurrencyRef?:  ICurrencyRef
    LinkedTxn: [
      {
        TxnId: Number, 
        TxnType: String
      }
    ], 
    SalesTermRef: {
      value: Number
    }, 
    DueDate?: String, 
    sparse?: Boolean, 
    line?: ILineStandard
    Balance?: Number
    MetaData? : IMetaData
}

export interface IBillEmail{
  Address : String
}  
