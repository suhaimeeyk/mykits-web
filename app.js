let app = new Vue({
  el: '#app',
  data: {
      allData: '',
      register: '',
      myModal: false,
      hiddenId: null,
      actionButton: 'SENT',
      dyynamicTitle: 'Add data'
  },
  methods: {
      fetchAllData() {
          axios.post('action.php', {
              action: 'fetchall'
          }).then(res => {
              app.allData = res.data;
          })
      },
      openModal() {
          app.namesentaddmin = '';
          app.actionButton = 'SENT';
          app.dyynamicTitle = 'Reques';
          app.myModal = true;
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
              if (app.actionButton == 'Updateuser') {
                axios.post('action.php', {
                    action: 'updateuser',
                    nameuser: app.nameuser,
                    addressuser: app.addressuser,
                    phoneuser: app.phoneuser,
                    idprefix: app.idprefix,
                    idsex: app.idsex,
                    idposition: app.idposition,
                    hiddenId: app.hiddenId
                }).then(res => {
                    app.myModal = false;
                    app.fetchRegister();

                    app.nameuser = '';
                    app.addressuser = '';
                    app.phoneuser = '';
                    app.idprefix = '';
                    app.idsex = '';
                    app.idposition = '';

                    app.hiddenId = '';
                    alert(res.data.message);
                    window.location.reload();
                })
            }
          }
      },
      fetchData(id) {
        axios.post('action.php', {
            id: id,
            action: 'fetchSingle'

        }).then(res => {
            app.name = res.data.name;
            app.description = res.data.description;
            app.price = res.data.price;
            app.category_id = res.data.category_id;
            app.created = res.data.created;
            
            app.hiddenId = res.data.id;
            app.myModal = true;
            app.actionButton = 'Update';
            app.dyynamicTitle = 'Edit Data';
        });
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
    fetchRegister() {
        axios.post('action.php', {
            action: 'fetchregister'
        }).then(res => {
            app.register = res.data;
            console.log("fetchregis");
        })
    },
    edituserDataUser(iduser) {
        axios.post('action.php', {
            iduser: iduser,
            action: 'editUser'

        }).then(res => {
            app.nameuser = res.data.nameuser;
            app.nameprefix = res.data.nameprefix;
            app.addressuser = res.data.addressuser;
            app.phoneuser = res.data.phoneuser;
            app.namesex = res.data.namesex;
            app.namepossition = res.data.namepossition;
            
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
    }  
  },
  created() {
      this.fetchAllData();
      this.fetchRegister();
  }
})