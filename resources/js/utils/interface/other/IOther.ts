import { IItemAccountRef, IItemRef } from "../item/IItem"

export interface IAccountBasedExpenseLineDetail{
    BillableStatus?: String
    TaxCodeRe?: ITaxCodeRef
    AccountRef?: IAccountRef
    CustomerRef?:ICustomerRef
}
export interface ITaxCodeRef{
    value?: String
}
export interface IAccountRef{
    name?: String
    value?:String
}
export interface ICustomerRef{
    name?: String
    value?:String
}
export interface IMetaData{
    CreateTime?: String
    LastUpdatedTime?:String
}

export interface ILine{
    Id?                  : String
    LineNum?             : Number
    Description?         : String
    Amount?              : Number
    DetailType?          : String
    SalesItemLineDetail? : ISalesItemLineDetail
    SubTotalLineDetail?  : any

}
export interface IDeliveryInfo{
    DeliveryType?: String
    DeliveryTime?: String
}


export interface ISalesItemLineDetail{
    ItemRef?         : IItemRef
    UnitPrice?       : Number
    ItemAccountRef?  : IItemAccountRef
}


export interface IToken{
    access_token? : string
    refresh_token? : string
    x_refresh_token_expires_in? : string
    expires_in? : string
}