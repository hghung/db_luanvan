<template>
    <div class="container-fluid" id="main-app">
        <chatComponent/>
    </div>

</template>

<script>
    import chatComponent from "./ChatApp";
    export default {
        components:{
            chatComponent
        }
    }
</script>

<style>
    .message_container {
    background-color: #ffffff;
    border: 1px solid rgb(235, 235, 235);
    border-radius: 8px;
    height: 100%;
    position: relative;
    }
    .inbox_user_list {
    display: inline-block;
    padding: 30px 30px 40px;
    width: 100%;
    }
    .inbox_user_list ul{
    height: 625px;
    overflow-y: scroll;
    }
    .inbox_user_list ul::-webkit-scrollbar {
    background: transparent;
    border-radius: 3px;
    padding-right: 10px;
    width: 4px;
    }
    .inbox_user_list ul::-webkit-scrollbar-thumb {
    background-color: #f7f7f7;
    border-radius: 3px;
    height: 250px;
    }
    .inbox_user_list .wrap{
    position: relative;
    }
    .inbox_user_list .wrap img{
    border-radius: 50%;
    float: left;
    margin-right: 15px;
    }
    .inbox_user_list .wrap .meta h5.name{
    font-size: 16px;
    font-family: "Nunito";
    color: #484848;
    font-weight: bold;
    line-height: 1.2;
    margin-bottom: 0;
    }
    .inbox_user_list .wrap .meta p.preview{
    font-size: 14px;
    font-family: "Nunito";
    color: rgb(119, 119, 119);
    line-height: 2;
    margin-bottom: 0;
    }
    .inbox_user_list .wrap .m_notif{
    border: 2px solid #ffffff;
    border-radius: 50%;
    background-color: rgb(252, 68, 90);
    color: #ffffff;
    font-size: 10px;
    font-family: "Lato";
    line-height: 17px;
    height: 21px;
    position: absolute;
    right: 5%;
    text-align: center;
    top: 10px;
    width: 21px;
    }
    .inbox_user_list ul li {
    padding: 10px 0;
    }
    .inbox_user_list .iu_heading {
    padding-bottom: 25px;
    }
    .inbox_user_list ul li.contact .wrap .meta{
    display: inline-block;
    margin-top: 10px;
    }
    .iu_heading .candidate_revew_search_box input.form-control{
    width: 75%;
    }
    .iu_heading .candidate_revew_search_box .candidate_revew_search_box button{
    background-color: transparent;
    }
    .inbox_user_list ul li.contact .wrap span {
    background-color: #95a5a6;
    border: 1px solid #ffffff;
    border-radius: 50%;
    height: 13px;
    left: 50px;
    margin: 0px 0 0 1px;
    position: absolute;
    width: 13px;
    }
    .inbox_user_list ul li.contact .wrap span.online {
    background-color: #2ecc71;
    }
    .inbox_user_list ul li.contact .wrap span.away {
    background-color: #f1c40f;
    }
    .inbox_user_list ul li.contact .wrap span.busy {
    background-color: #e74c3c;
    }
    .inbox_user_list ul li.contact .wrap img {
    border-radius: 50%;
    float: left;
    margin-right: 10px;
    width: 50px;
    }
    .message_container .inbox_chatting_box {
    position: relative;
    max-height: 575px !important;
    height: auto;
    margin-right: 10px;
    max-height: calc(100% - 93px);
    overflow-y: scroll;
    overflow-x: hidden;
    }
    .message_container .inbox_chatting_box::-webkit-scrollbar {
    background: transparent;
    border-radius: 3px;
    padding-right: 10px;
    width: 4px;
    }
    .message_container .inbox_chatting_box::-webkit-scrollbar-thumb {
    background-color: #ededed;
    border-radius: 3px;
    }
    .message_container .user_heading{
    background-color: #ffffff;
    border-bottom: 1px solid rgb(235, 235, 235);
    border-radius: 8px 8px 0 0;
    padding: 30px;
    position: relative;
    }
    .inbox_chatting_box .chatting_content{
    display: inline-block;
    padding: 15px 30px 0 30px;
    position: relative;
    width: 100%;
    }
    .message_container .user_heading .wrap img {
    float: left;
    margin-right: 10px;
    border-radius: 50%;
    }
    .message_container .user_heading .wrap h5.name {
    font-size: 16px;
    font-family: "Nunito";
    color: rgb(10, 10, 10);
    line-height: 1.2;
    margin-bottom: 0;
    }
    .message_container .user_heading .wrap p.preview {
    font-size: 15px;
    font-family: "Open Sans";
    color: rgb(127, 127, 127);
    line-height: 1.867;
    margin-bottom: 0;
    }
    .inbox_chatting_box .chatting_content li {
    padding: 20px 0;
    margin-bottom: 0;
    }
    .inbox_chatting_box .chatting_content li.media.sent {
    float: left;
    clear: both;
    }
    .inbox_chatting_box .chatting_content li.media img{
    border-radius: 50px;
    margin-bottom: 10px;
    }
    .inbox_chatting_box .chatting_content li.media .media-body {
    display: block;
    flex: auto;
    }
    .inbox_chatting_box .chatting_content li.media span {
    background-color: #95a5a6;
    border: 1px solid #ffffff;
    border-radius: 50%;
    height: 13px;
    left: 80px;
    margin: 2px 0 0 -2px;
    position: absolute;
    width: 13px;
    }
    .inbox_chatting_box .chatting_content li.media span.busy {
    background-color: #e74c3c;
    }
    .inbox_chatting_box .chatting_content li.media .media-body .date_time{
    font-size: 14px;
    }
    .inbox_chatting_box .chatting_content li.media .media-body p{
    background-color: #f7f7f7;
    border: 1px solid #f7f7f7;
    border-radius: 3px;
    color: #484848;
    font-size: 14px;
    font-family: "Open Sans";
    margin-bottom: 0;
    padding: 10px 15px;
    max-width: 290px;
    }
    .inbox_chatting_box .chatting_content li.media.reply {
    float: right;
    clear: both;
    }
    .inbox_chatting_box .chatting_content li.media.reply.first {
    margin: -15px 0;
    }
    .inbox_chatting_box .chatting_content li.media.reply .media-body p {
    border-radius: 3px;
    background-color: #eef1ff;
    color: #484848;
    max-width: 320px;
    padding: 10px 15px;
    }
    .message_container .message_input {
    background-color: #f9fafc;
    bottom: 30px;
    left: 30px;
    position: absolute;
    right: 30px;
    text-align: center;
    }
    .message_container .message_input form input.form-control {
    background-color: #f7f7f7;
    border-color: transparent;
    border-radius: 8px;
    height: 70px;
    width: 100%;
    padding-left: 30px;
    }
    .message_container .message_input form input.form-control::placeholder {
    font-size: 14px;
    font-family: "Nunito";
    color: #484848;
    line-height: 1.714;
    }
    .message_container .message_input form input.form-control:focus {
    box-shadow: none;
    outline: none;
    }
    .message_container .message_input form button.btn {
    background-color: #ff5a5f;
    border: 1px solid #ffffff;
    border-radius: 8px;
    color: #ffffff;
    font-size: 16px;
    flex: 1;
    height: 50px;
    position: absolute;
    right: 20px;
    width: 190px;
    }
    .message_container .message_input form button.btn:focus {
    box-shadow: none;
    outline: none;
    }
    .message_container .message_input form button.btn span {
    font-size: 20px;
    padding-left: 10px;
    }
</style>
