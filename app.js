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
      fetchRegister() {
        axios.post('action.php', {
            action: 'fetchregister'
        }).then(res => {
            app.register = res.data;
            console.log("fetchregis");
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
          }
          if (app.nameuser != '' && app.idprefix != '' && app.addressuser != '' && app.phoneuser != '' &&
          app.idsex != ''  && app.idposition != '') {
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
            app.nameuser = res.data.nameuser;
            app.idprefix = res.data.idprefix;
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
    }  
  },
  created() {
      this.fetchAllData();
      this.fetchRegister();
  }
})