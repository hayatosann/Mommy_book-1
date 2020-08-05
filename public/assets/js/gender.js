// おなかの赤ちゃん＆お子様（ご兄弟）のプロフィールご登録


($('input[class="female"]').attr('name', 'female')).click(function(){
        let $gender = $('input[class="female"]').attr('name', 'gender');
        let $male = $('input[class="male"]').attr('name', '');
        let $none = $('input[class="none"]').attr('name', '');
        console.log($gender);
        console.log($male);
        console.log($none)
});

($('input[class="male"]').attr('name', 'male')).click(function(){
    let $gender = $('input[class="male"]').attr('name', 'gender');
    let $female = $('input[class="female"]').attr('name', '');
    let $none = $('input[class="none"]').attr('name', '');
    console.log($gender);
    console.log($female);
    console.log($none);
});

($('input[class="none"]').attr('name', 'none')).click(function(){
    let $gender = $('input[class="none"]').attr('name', 'gender');
    let $female = $('input[class="female"]').attr('name', '');
    let $male = $('input[class="male"]').attr('name', '');
    console.log($gender);
    console.log($female);
    console.log($male);
});
