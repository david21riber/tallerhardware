/*
Script by Lassie Marlowe Digital
by Paddy O'Sullivan
*/


int LED2 = 2;
int LED3 = 3;
int LED4 = 4;
int LED5 = 5;
int LED6 = 6;
void setup() {
Serial.begin( 9600 );

pinMode( LED2, OUTPUT );
pinMode( LED3, OUTPUT );
pinMode( LED4, OUTPUT );
pinMode( LED5, OUTPUT );
pinMode( LED6, OUTPUT );
}

void loop() {

while (Serial.available() == 0);


int COM_value = Serial.read() - '0';


Serial.println(COM_value);

//LED1
if( COM_value == 1 )
{
digitalWrite( LED2, HIGH );
}
if( COM_value == 2 )
{
digitalWrite( LED2, LOW ); 
}

//LED2
if( COM_value == 3 )
{
digitalWrite( LED3, HIGH );
}
if( COM_value == 4 )
{
digitalWrite( LED3, LOW ); 
}

//LED3
if( COM_value == 5 )
{
digitalWrite( LED4, HIGH ); 
}
if( COM_value == 6 )
{
digitalWrite( LED4, LOW ); 
}

//LED #4
if( COM_value == 7 )
{
digitalWrite( LED5, HIGH ); 
}
if( COM_value == 8 )
{
digitalWrite( LED5, LOW ); 
}
//LED #5
if( COM_value == 9 )
{
digitalWrite( LED6, HIGH ); 
}
if( COM_value == 0 )
{
digitalWrite( LED6, LOW ); 
}


} 
