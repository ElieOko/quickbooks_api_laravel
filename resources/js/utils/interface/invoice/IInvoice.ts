import { IBillEmail } from "../bill/IBill"
import { ICurrencyRef } from "../currency/ICurrency"
import { ICustomerRef, IDeliveryInfo, ILine, IMetaData } from "../other/IOther"

export interface IInvoice{
    AllowIPNPayment?                 : Boolean
    AllowOnlinePayment?              : Boolean
    AllowOnlineCreditCardPayment?    : Boolean
    AllowOnlineACHPayment?           : Boolean
    domain?                          : String
    sparse?                          : Boolean
    Id?                              : Number
    SyncToken?                       : Number
    CustomField?                     : Array<any>
    TxnDate?                         : String
    FreeFormAddress?                 : Boolean
    DueDate?                         : String
    GlobalTaxCalculation?            : String
    TotalAmt?                        : Number
    PrintStatus?                     : String
    EmailStatus?                     : String
    Balance?                         : Number
    LinkedTxn?                       : Array<any>
    MetaData?                        : IMetaData
    CurrencyRef?                     : ICurrencyRef
    BillEmail?                       : IBillEmail
    DeliveryInfo?                    : IDeliveryInfo
    CustomerRef?                     : ICustomerRef
    Line?                            : Array<ILine>
}