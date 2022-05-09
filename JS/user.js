class user{
    constructor(email, password) {
      this.email= email;
       this.password= password;
    }
    toString(){
      console.log(this.email);
    }

    get login(){
      return this.email;
    }
  }
//   let myUser = new user();
//   console.log(myUser.login);