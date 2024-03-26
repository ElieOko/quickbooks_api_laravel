export const ApiRoutes = {
    auth: "/user/oauth",
    callback:"/callback",
    redirect: "/redirect",
    //Item
    allItem: "/query",
    createItem: "/item",
    detailItem: "/item/:id",
    deleteItem: "/item?operation=delete",
    updateItem: "/item",
    //Customer
    allCustomer: "/query",
    createCustomer: "/customer",
    detailCustomer: "/customer/Invoice",
    deleteCustomer : "/customer/",
    //Invoice
    allInvoice: "/query",
    createInvoice: "/invoice",
    detailInvoice: "/invoice/:id",
    deleteInvoice: "/invoice?operation=delete",
    updateInvoice: "/invoice",

    //
}