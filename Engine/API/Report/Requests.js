API.Report = {
    collection: function ()
    {
        API.request('Exams.Report.Collection', {
            
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Exams.Report.Create', {

        }, function (data) {
            API.Questions.collection();
        }, function () {

        });
    }
}