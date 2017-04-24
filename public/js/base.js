/**
 * Created by Alan on 24/04/2017.
 */
$(document).ready(function (e)
{
    $('#home, #products, #profile').on('click', function()
    {
        $.ajax(
            {
                url: 'Controller/PageController.php',
                method: 'POST',
                data: {action: this.id},
                success: function (data)
                {
                    $('#main-container').html(data);
                }
            });
    });
});