$(document).ready(function() {

  // if on a page with messages functionality
  var messages = $('.messages');
  if(messages.length) {
    // scroll messages to bottom
    $('.messages').scrollTop($('.messages')[0].scrollHeight);

    // Set up pusher
    var pusher = new Pusher('62129c85d10afca8543e', {
      cluster: 'us2',
      forceTLS: true
    });

    // listen to pusher and get notified when a new message has been sent so we can then update the messages
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function (data) {
      updateChat();
    });
  }

  // send message
  $(document).on('click', '.compose [type=submit]', function() {
    var button = $(this);
    var container = $(this).closest('.compose');
    var textarea = container.find('textarea');

    if(!textarea.val()) {
      return;
    }

    // disable button/input
    button.val('Sending..').attr('disabled', 'disabled');
    textarea.attr('disabled', 'disabled');

    $.ajax({
      'url': '/action/send-message',
      'type': 'post',
      'data': {'message': textarea.val(), 'id': button.attr('course-id')},
      'success': function() {
        button.val('Send').removeAttr('disabled');
        textarea.val('').removeAttr('disabled').focus();
      }
    });
  });

  // csrf validation for ajax
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
});

// update the messages
function updateChat() {
  $('.chat-container').load(" .chat-container", function (data) {
    // scroll messages to bottom
    var messages = $('.messages');
    $('.messages').scrollTop($('.messages')[0].scrollHeight);
  });
}