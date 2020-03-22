
<div class="content-contacts">
    <div class="content-name">Hаши контакты</div>
    Ованес: +38(068)-87-24-472
    <p>Напишите нам на email по поводу пожеланий или предложений!</p>

    <div class="col-sm-6 col-sm-offset-3">
        <form class="form-group">
            <div class="form-group">
                <input class="form-control" type="email" placeholder="Ваш email.." ng-model="user_email">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Тема.." ng-model="user_subject">
            </div>
            <div class="form-group">
                <textarea class="form-control" cols="50" rows="10" placeholder="Ваше сообщение.." ng-model="user_contain"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-default" type="submit" value="Отправить" ng-click="clickedd()"><br>
                <p class="text-warning">{{noticeSendRequest}}</p>
            </div>
        </form>
    </div>

</div>