function verif(){
	titre=document.f.titre.value;
	price=document.f.price.value;
	img=document.f.img.value;
	p_key_word=document.f.p_key_word.value;
	if(titre=="" || price=="" || img=="" || p_key_word==""){
		alert("Tapez tous les elements !!");
	} 
}