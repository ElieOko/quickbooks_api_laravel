import { IAccountBasedExpenseLineDetail } from "../other/IOther"

export interface ILineStandard{
    id?:Number
    description?:string
    DetailType?:string
    Amount?:number
    AccountBasedExpenseLineDetail?: IAccountBasedExpenseLineDetail
}
