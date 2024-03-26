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