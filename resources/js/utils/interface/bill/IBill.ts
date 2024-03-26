import { ILineStandard } from "../line/ILineStandar"
import { IMetaData } from "../other/IOther"

export interface IBill{
    id?:Number
    SyncToken: String, 
    domain: String, 
    APAccountRef: {
      name: String, 
      value: Number
    }, 
    VendorRef: {
      name: String, 
      value: Number
    }, 
    TxnDate: String, 
    TotalAmt: Number, 
    CurrencyRef: {
      name: String, 
      value: String
    }, 
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