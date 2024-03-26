import { IUser } from "../utils/interface/user/IUser";


export function setUser(userData: IUser): void {
    localStorage.setItem('user_app', JSON.stringify(userData));
  }
  
  export function getUser(): IUser | null {
    const userString = localStorage.getItem('user_app');
    return userString ? JSON.parse(userString) : null;
  }
  export function clearUser(): void {
    localStorage.removeItem('user_app');
  }