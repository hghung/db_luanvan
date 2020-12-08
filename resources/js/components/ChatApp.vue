<template>
    <div class="row">
          <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
          <div class="col-lg-9 col-xl-10 maxw100flex-992">
              <div class="row">
                  <div class="col-lg-12 mb10">
                      <div class="breadcrumb_content style2">
                          <h2 class="breadcrumb_title">Nhắn tin</h2>
                          <p>Chúng tôi rất vui khi gặp lại bạn</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-5 col-xl-4">
                  <div class="message_container">
                    <div class="inbox_user_list">
                      <div class="iu_heading">
                        <div class="candidate_revew_search_box">
                          <form class="form-inline">
                              <input class="form-control" type="search" placeholder="Serach" aria-label="Search">
                              <button class="btn" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                            </form>
                        </div>
                      </div>
                      <ul>
                        <li class="contact" @click.prevent="selectUser(user.id)" v-for="user in userList" :key="user.id">
                          <a href="#">
                            <div class="wrap">
                              <div  v-if="onlineUser(user.id) || online.id==user.id" >
                                  <span class="contact-status online"></span>
                              </div>
                              <div v-else>
                                  <span class="contact-status offline"></span>
                              </div>
                              
                              <img class="img-fluid" :src="'../' + user.avatar" />
                              <div class="meta">
                                <h5 class="name">{{user.name}}</h5>
                                <p class="preview">123123123</p>
                              </div>
                              <div class="m_notif">2</div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-7 col-xl-8">
                  <div class="message_container">
                    <div class="user_heading" style="padding-bottom: 20px;">
                      <a href="#">
                        <div class="wrap" v-if="userMessage.user">
                          
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" :src="'../' + userMessage.user.avatar" style="width:57px; height:57px;"/>

                                  <div class="meta" >
                                    <h5 class="name">{{userMessage.user.name}}</h5>
                                    <p class="preview">was online today at 11:43</p>
                                  </div>
                              </div>
                              <div style="margin-left: 200px;">
                                <a @click.prevent="deleteAllMessage" href="#"><i class="fa fa-trash-o" style="color:red"></i> Xóa tất cả tin</a>
                              </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- phan chat -->
                    <div class="inbox_chatting_box" v-chat-scroll>
                      <ul class="chatting_content" v-for="message in userMessage.messages" :key="message.id" >
                        <!-- nhan tin minh -->
                        <li class="media reply first " v-if="userMessage.user.id != message.user.id">
                         
                          <div class="media-body text-right" >
                            <div class="date_time">{{message.created_at | timeformat}}</div>
                              <p>{{message.message}}</p>
                              <a @click.prevent="deleteSingleMessage(message.id)" style="padding-left: 0px;" href="#"><i class="fa fa-trash-o" style="color:red; margin-top:5px;"></i></a>
                          </div>
                        </li>
                        <!-- nhan tin cua doi phuong -->
                        <li class="media sent" v-else>
                          <img class="img-fluid align-self-start mr-3" :src="'../' + userMessage.user.avatar" style="width:57px; height:57px;"/>
                          <div class="media-body">
                            <div class="date_time">{{message.created_at | timeformat}}</div>
                              <p>{{message.message}}</p>
                               <a @click.prevent="deleteSingleMessage(message.id)" style="padding-left: 0px; " href="#"><i class="fa fa-trash-o" style="color:red; margin-top:5px;"></i></a>
                          </div>
                         
                        </li>
                        
                      </ul>
                    </div>
                    <!-- nhan tin -->
                    <div class="mi_text">
                      <div class="message_input">
                        <form class="form-inline">
                            <p v-if="typing">{{typing}} đang nhập.......</p>

                            <input class="form-control" type="text" placeholder="Nhập tin nhắn..." v-if="userMessage.user" @keydown="typeingEvent(userMessage.user.id)" @keydown.enter="sendMessage" v-model="message">

                            <input class="form-control" type="text" placeholder="Nhập tin nhắn..." v-else disabled >

                            <button class="btn"  >Gửi tin</button>
                          </form>
                      </div>
                    </div>
                    <!-- end nhantin -->
                  </div>
						    </div>

              </div>
          </div>
        </div>
</template>

<script>
import _ from 'lodash'
export default {
  mounted(){
    Echo.private(`chat.${authuser.id}`)
    .listen('MessageSend', (e) => {
       this.selectUser(e.message.from);
        // console.log(e.message.message);
    });
    this.$store.dispatch('userList');

Echo.private('typingevent')
    .listenForWhisper('typing', (e) => {
      if(e.user.id == this.userMessage.user.id && e.userId == authuser.id){
        this.typing = e.user.name;
      }
        setTimeout(() => {
          this.typing = '';
        }, 2000);
    });
Echo.join('liveuser')
    .here((users) => {
      this.users = users
    })
    .joining((user) => {
        this.online = user
    })
    .leaving((user) => {
        console.log(user.name);
    });

  },
  data(){
    return{
       message:'',
       typing:'' ,
       users:[],
       online:''
    }
  },
  computed:{
    userList(){
    return  this.$store.getters.userList
    },
    userMessage(){
        return  this.$store.getters.userMessage
    }
  },
  created(){
    
  },
  methods:{
    selectUser(userId){
       this.$store.dispatch('userMessage',userId);
    },
    sendMessage(e){
      e.preventDefault();
      if(this.message!=''){
        axios.post('/senemessage',{message:this.message,user_id:this.userMessage.user.id})
        .then(response=>{
          this.selectUser(this.userMessage.user.id);
        })
        this.message = '';
      }
    },
    deleteSingleMessage(messageId){
      axios.get(`/deletesinglemessage/${messageId}`)
      .then(response=>{
        this.selectUser(this.userMessage.user.id)
      })
    },
    deleteAllMessage(){
        axios.get(`/deleteallmessage/${this.userMessage.user.id}`)
      .then(response=>{
        this.selectUser(this.userMessage.user.id)
      })
    },
    typeingEvent(userId){
      Echo.private('typingevent')
      .whisper('typing', {
          'user': authuser,
          'typing':this.message,
          'userId':userId
      });
    },
    onlineUser(userId){
      return _.find(this.users,{'id':userId});
    }
  }
}
</script>

<style>
    
</style>
