export interface IQueryResponse{
    QueryResponse : Object
    Invoice : Array<String>
    startPosition? : number
    maxResults : number
    totalCount : number
    time : string
}