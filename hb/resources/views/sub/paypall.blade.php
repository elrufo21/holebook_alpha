<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  </head>
  
  <body>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID&vault=true&intent=subscription">
    </script>
  
    <div id="paypal-button-container"></div>
  
      <script>
        paypal.Buttons({
          createSubscription: function(data, actions) {
            return actions.subscription.create({
              'plan_id': 'YOUR_PLAN_ID' // Creates the subscription
            });
          },
          onApprove: function(data, actions) {
            alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
          }
        }).render('#paypal-button-container'); // Renders the PayPal button
      </script>
    </body>
  </html>