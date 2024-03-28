import { IToken } from "../utils/interface/other/IOther";


export function setToken(token: IToken) {
    localStorage.setItem('token_app', JSON.stringify(token));
  }
  
  export function getToken(): IToken | null {
    const tokenString = localStorage.getItem('token_app');
    return tokenString ? JSON.parse(tokenString) : null;
  }
  export function clearToken(): void {
    localStorage.removeItem('token_app');
  }