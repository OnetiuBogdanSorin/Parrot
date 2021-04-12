var $parrot_species = $("#parrot_species")
var $token = $("#post_token")

$parrot_species.change(function()
{
    var $form = $(this).closest('form')
    var data = {}

    data[$token.attr('name')] = $token.val()
    data[$parrot_species.attr('name')] = $parrot_species.val()

    $.post($form.attr('action'), data).then(function (response)
    {
        $("#parrot_subspecie").replaceWith($(response).find("#parrot_subspecie"))
    })
})