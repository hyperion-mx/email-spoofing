#imports
import urllib.request
import urllib
#define mail host
mail_hsot = "https://unbloodied-specific.000webhostapp.com/send.php"
#User inputs
toemail = input("To Email : ")
fromemail = input("From Email : ")
subject = input("Subject : ")
message = input("Message : ")
fromname = input("From Name : ")
#Create data post, It's Dict
data = {
    'toemail':toemail,
    'fromemail':fromemail,
    'subject':subject,
    'message':message,
    'fromname':fromname,

}
#encode data post using url encode
encoded_data = urllib.parse.urlencode(data).encode("UTF-8")
try:
    print("Email Sending ....")
    urllib.request.urlopen(mail_hsot,encoded_data)
    print("Successfully Sent")
except:
    print("Sending Failed")