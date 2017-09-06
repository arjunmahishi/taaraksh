for(var i=0;i<6;i++){
    cardCode = `
        <div class="card-img col-xs-6 col-xs-offset-3">
            <img class="img-responsive" src="assets/images/logo.png" alt=""/>
        </div>
        <div class="card-body col-xs-12">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        </div>
    `;

    card = document.createElement("div")
    card.className = "card";
    card.innerHTML = cardCode;

    document.querySelector("#events-grid").appendChild(card);
}
