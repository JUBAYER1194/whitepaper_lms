class AppStorage {
    storeToken(token)
    {
        localStorage.setItem('token',token);
    }
    storeUser(user)
    {
        localStorage.setItem('user',user);
    }
    storeRole(Role)
    {
        localStorage.setItem('Role',Role);
    }

    store(user,token,Role)
    {
        this.storeToken(token)
        this.storeUser(user)
        this.storeRole(Role)
    }
    clear(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        localStorage.removeItem('Role')
    }
    getToken(){
        return localStorage.getItem('token')
    }
    getUSer(){
        return localStorage.getItem('user')
    }
    getRole()
    {
        return localStorage.getItem('Role')
    }


}
export default AppStorage=new AppStorage()
