# Email relay service

A serverless function for IBM Cloud Functions, designed to receive a webhook from IFTTT in response to their GMail trigger.  Include in the body of the trigger the information you'd like to receive by SMS (I use "[From name] sent: [Subject]" which works well).

## Getting started

You will need a Nexmo account and an IFTTT account to use this example clode.  You will also need an IBM Cloud account, the `ibmcloud` command line tool and the `cloud-functions` plugin.

Copy the `.env-example` file to `.env` and edit to include your Nexmo API key and secret, and the phone number that should receive SMSes.

Run `deploy.sh` to put the serverless action on the cloud.

To find out the URL to call, use this command: `ibmcloud wsk action get --url sms-by-email/send_sms` - copy the output of this command.

Log in to IFTTT and choose the GMail trigger that works best for your use case.  Link it to a **Webhook** event.  In the webhook, set the URL to be the URL that you just copied; then add the data in the body of the webhook that you want to send by SMS.

With everything set up and ready to go, test your setup by sending yourself an email!

