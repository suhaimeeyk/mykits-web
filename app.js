let app = new Vue({
  el: '#app',
  data: {
      allData: '',
      register: '',
      registerlogin: '',
      myModal: false,
      myModallogin: false,
      hiddenId: null,
      hiddenIdlogin: null,
      actionButton: 'SENT',
      actionButtonlogin: 'SENT',

      actionButtonUser: 'INSERT ',
      dyynamicTitle: 'ADD REGISTER'
  },
  methods: {
      fetchAllData() {
          axios.post('action.php', {
              action: 'fetchall'
          }).then(res => {
              app.allData = res.data;
          })
      },
      fetchRegister() {
        axios.post('action.php', {
            action: 'fetchregister'
        }).then(res => {
            app.register = res.data;
            // console.log("fetchregis");
        })
      },
      fetchRegisterlogin() {
        axios.post('action.php', {
            action: 'fetchregisterlogin'
        }).then(res => {
            app.registerlogin = res.data;
            // console.log("fetchregislogin");
        })
      },

      openModal() {
          app.namesentaddmin = '';
          app.actionButton = 'SENT';
          app.dyynamicTitle = 'Reques';
          app.myModal = true;
      },
      openModalUser() {
        app.idprefix = '';
        app.nameuser = '';
        app.addressuser = '';
        app.phoneuser = '';
        app.idsex = '';
        app.idposition = '';

        app.actionButton = 'INSERT';
        app.dyynamicTitle = 'Add Data';
        app.myModal = true;
    },
    openModalUserlogin() {
        app.username = '';
        app.password = '';
        app.name = '';
        app.level = '';

        app.actionButtonlogin = 'INSERT';
        app.dyynamicTitle = 'Add Data';
        app.myModallogin = true;
    },


      submitData() {
          if (app.namesentaddmin != '' ) {
              if (app.actionButton == 'SENT') {
                  axios.post('action.php', {
                      action: 'sentaddmin',
                      namesentaddmin: app.namesentaddmin
                  }).then(res => {
                      app.myModal = false;
                      app.fetchAllData();
                      app.namesentaddmin = '';
                      alert(res.data.message);
                      window.location.reload();
                  });
              }
          }
      },
      submitDataUser() {
        if (app.idprefix != '' && app.nameuser != '' && app.addressuser != '' && app.phoneuser != '' &&
        app.idsex != ''  && app.idposition != '') {
                    if (app.actionButton == 'INSERT') {
                        axios.post('action.php', {
                            action: 'insertuser',
                            idprefix: app.idprefix,
                            nameuser: app.nameuser,
                            addressuser: app.addressuser,
                            phoneuser: app.phoneuser,
                            idsex: app.idsex,
                            idposition: app.idposition,
                        }).then(res => {
                            app.myModal = false;
                            app.fetchRegister();

                            app.idprefix = '';
                            app.nameuser = '';
                            app.addressuser = '';
                            app.phoneuser = '';
                            app.idsex = '';
                            app.idposition = '';

                            alert(res.data.message);
                            window.location.reload();
                        });
                    }
                      if (app.actionButton == 'Update') {
                        axios.post('action.php', {
                            action: 'updateuser',
                            idprefix: app.idprefix,
                            nameuser: app.nameuser,
                            addressuser: app.addressuser,
                            phoneuser: app.phoneuser,
                            idsex: app.idsex,
                            idposition: app.idposition,
                            hiddenId: app.hiddenId
                        }).then(res => {
                            app.myModal = false;
                            app.fetchRegister();
            
                            app.idprefix = '';
                            app.nameuser = '';
                            app.addressuser = '';
                            app.phoneuser = '';
                            app.idsex = '';
                            app.idposition = '';
            
                            app.hiddenId = '';
                            alert(res.data.message);
                            window.location.reload();
                            console.log("Updatelogin");
                            
                        })
                    }
                }
    },
    submitDataUserlogin() {
        if ( app.username != '' && app.password != '' && app.name != '' &&
        app.level != '') {
                    if (app.actionButtonlogin == 'INSERT') {
                        axios.post('action.php', {
                            action: 'insertuserlogin',
                            username: app.username,
                            password: app.password,
                            name: app.name,
                            level: app.level,
                        }).then(res => {
                            app.myModallogin = false;
                            app.fetchRegisterlogin();

                            app.username = '';
                            app.password = '';
                            app.name = '';
                            app.level = '';


                            alert(res.data.message);
                            window.location.reload();
                        });
                    }
                      if (app.actionButtonlogin == 'Update') {
                        axios.post('action.php', {
                            action: 'updateuserlogin',
                            username: app.username,
                            password: app.password,
                            name: app.name,
                            level: app.level,
                            hiddenIdlogin: app.hiddenIdlogin
                        }).then(res => {
                            app.myModallogin = false;
                            app.fetchRegisterlogin();
            
                            app.username = '';
                            app.password = '';
                            app.name = '';
                            app.level = '';
            
                            app.hiddenIdlogin = '';
                            alert(res.data.message);
                            window.location.reload();
                        })
                    }
                }
    },
    deleteData(idsentaddmin) {
        if (confirm("Are you Sure ?")) {
            axios.post('action.php', {
                action: 'delete',
                idsentaddmin: idsentaddmin
            }).then(res => {
                app.fetchAllData();
                alert(res.data.massage);
            });
        }
    },
    fetchuserDataUser(iduser) {
        axios.post('action.php', {
            iduser: iduser,
            action: 'fetchUser'

        }).then(res => {
            app.idprefix = res.data.idprefix;
            app.nameuser = res.data.nameuser;
            app.addressuser = res.data.addressuser;
            app.phoneuser = res.data.phoneuser;
            app.idsex = res.data.idsex;
            app.idposition = res.data.idposition;
            
            app.hiddenId = res.data.iduser;
            app.myModal = true;
            app.actionButton = 'Update';
            app.dyynamicTitle = 'Edit Data';
        });
    },
    deleteDataUser(iduser) {
        if (confirm("Are you Sure ?")) {
            axios.post('action.php', {
                action: 'deleteUser',
                iduser: iduser
            }).then(res => {
                app.fetchRegister();
                alert(res.data.massage);
            });
        }
    },  
    fetchuserDataUserlogin(idlogin) {
        axios.post('action.php', {
            idlogin: idlogin,
            action: 'fetchUserlogin'

        }).then(res => {
            app.username = res.data.username;
            app.password = res.data.password;
            app.name = res.data.name;
            app.level = res.data.level;
            
            app.hiddenIdlogin = res.data.idlogin;
            app.myModallogin = true;
            app.actionButtonlogin = 'Update';
            app.dyynamicTitle = 'Edit Data';
        });
    },
    deleteDataUserlogin(idlogin) {
        if (confirm("Are you Sure ?")) {
            axios.post('action.php', {
                action: 'deleteUserlogin',
                idlogin: idlogin
            }).then(res => {
                app.fetchRegisterlogin();
                alert(res.data.massage);
            });
        }
    } 


  },
  created() {
      this.fetchAllData();
      this.fetchRegister();
      this.fetchRegisterlogin();
  }
})