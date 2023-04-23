#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <Servo.h>
//int Led_OnBoard = 2;                  // Initialize the Led_OnBoard 
int val1 = D0;  
int val2 = D1;
int val3 = D2;
int val4 = D3;
Servo htservo;
Servo servo;  
int pos = 0;  

const char* ssid = "Pathirage";                  // Your wifi Name       
const char* password = "pathirage782";          // Your wifi Password
int s1;
const char *host = "192.168.1.31"; //Your pc or server (database) IP, example : 192.168.0.0 , if you are a windows os user, open cmd, then type ipconfig then look at IPv4 Address.

void setup() {
  // put your setup code here, to run once:
  delay(1000);
 // pinMode(Led_OnBoard, OUTPUT);       // Initialize the Led_OnBoard pin as an output
  pinMode(val1, INPUT);
  pinMode(val2, INPUT);
  pinMode(val3, INPUT);
  pinMode(val4, INPUT);
  
  htservo.attach(9);
  pinMode (3,INPUT);
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting"); // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    //digitalWrite(Led_OnBoard, LOW);
   // delay(250);
    Serial.print(".");
    //digitalWrite(Led_OnBoard, HIGH);
    delay(250);
  }

  //digitalWrite(Led_OnBoard, HIGH);
  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.println("Connected to Network/SSID");
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP

  servo.attach(D4); //D4

}

void loop() {
  int  ldrvalue5=digitalRead(D5);
  if (ldrvalue5= 1)
    {
  servo.write(90);

delay(1000);
servo.write(0);

delay(1000);}

/*
   htservo.write(pos);
     
    if (digitalRead(3) == HIGH)
    {
      pos = 90;
      htservo.write(pos);
      delay(3000);
    }
    
    else 
    {
      pos = 0;
      htservo.write(pos);
    }*/
  // put your main code here, to run repeatedly:
  HTTPClient http;    //Declare object of class HTTPClient
 
  String LdrValueSend, postData,LdrValueSend2,LdrValueSend3,LdrValueSend4,LdrValueSend5;
int  ldrvalue=digitalRead(val1);  //Read
int  ldrvalue2=digitalRead(val2);
int  ldrvalue3=digitalRead(val3);
int  ldrvalue4=digitalRead(val4);

delay(1000);
  LdrValueSend = String(ldrvalue);   //String to interger conversion
 LdrValueSend2 = String(ldrvalue2);
 LdrValueSend3 = String(ldrvalue3);
 LdrValueSend4 = String(ldrvalue4);
 LdrValueSend5 = String(ldrvalue5);
  //Post Data
  postData = "ldrvalue=" + LdrValueSend + "&ldrvalue2=" + LdrValueSend2 + "&ldrvalue3=" + LdrValueSend3 + "&ldrvalue4=" + LdrValueSend4;


   WiFiClient client;
  http.begin(client,"http://192.168.1.31/car-park/Nodemcu/InsertDB.php");              //Specify request destination
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");    //Specify content-type header
 
  int httpCode = http.POST(postData);   //Send the request

  String payload = http.getString();    //Get the response payload

  Serial.println("LDR Value=" + ldrvalue);
  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload
  Serial.println("Slot 1 =" + LdrValueSend);
 Serial.println("Slot 2 =" + LdrValueSend2);
  Serial.println("Slot 3 =" + LdrValueSend3);
   Serial.println("Slot 4 =" + LdrValueSend4);
   Serial.println("Entry Gate =" + LdrValueSend5);
  
  http.end();  //Close connection

  delay(4000);  //Here there is 4 seconds delay plus 1 second delay below, so Post Data at every 5 seconds
 // digitalWrite(Led_OnBoard, LOW);
 // delay(1000);
 // digitalWrite(Led_OnBoard, HIGH);
}
