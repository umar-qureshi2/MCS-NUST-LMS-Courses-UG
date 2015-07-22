#include <iostream>
#include <string>
#include <conio>

class carPark
{
public:
   int counter;
	struct carNode
	{
		string licensePlate;
		carNode * next;
	}*front,*rear;


	carPark()
	{
		front = rear = NULL;
  		counter = 0;
	}

    	void enqueue(string a);
		string dequeue();
		void display();
   	bool isempty();
		void search();
};
//--------------------------------------------------------

bool carPark::isempty()
{	return ( front == NULL )? true : false;	}

//--------------------------------------------------------
void carPark::enqueue(string a)
{
	carNode* temp;
	temp = new carNode;
   temp->licensePlate= a;
  	temp->next = NULL;
	if ( front == NULL )
	{
		front = temp;
		rear = front;
		counter++;
	}
	else
	{
		rear->next = temp;
		rear = temp;
		counter++;
	}
}

//--------------------

string carPark::dequeue()
{
	string xyz = "";
	carNode* temp;
	temp = front;
  	if ( isempty() )
	{	cout<<"No Cars Parked \n";	}
	else
	{
      xyz = temp->licensePlate;                                        
		front = front->next;
		counter--;
		return xyz;
  	}
   return xyz;
}

//-------------------------------------------------------------

void carPark::display()
{
  	if ( isempty() )
	{	cout<<"Parking lot is empty\n";	}
	else
	{
		carNode* current;
		current = front;
		while ( current != NULL )
		{
			cout<<"License Plate :"<<current->licensePlate<<endl;
			current = current->next;
		}
	}
}
//--------------------------------------------------------------
void carPark::search()
{
	int count = 1;
	string lp;
	cout<<"Enter license plate number :";	cin>>lp;
	carNode* temp;
	temp = front;
	while ( temp != NULL )
	{
		if ( lp == temp->licensePlate )
		{
			cout<<"License Plate is :"<<temp->licensePlate<<endl;
         cout<<"Car parked in slot number: "<<count;
			break;
		}
		else
		{	temp = temp->next;
      count++;	}
	}
	if (temp == NULL )
	{	cout<<"Car with the given license palte number not found."<<endl;	}
}
//-------------------------------------------------------------


void entercar(carPark &a, carPark &b);
void removecarparked(carPark &a, carPark &b);
int main()
{
	carPark parked;
	carPark waitin;
  	int choice;
   string x;

	do
	{
		cout<<"\n1. Park Car\n2. Remove Car\n3. Display\n4. ISempty\n5. Search\n6. Remove from waiting\n7. Exit"<<endl;
		cin>>choice;

		switch(choice)
		{
		case 1:
			entercar(parked,waitin);
			break;
		case 2:
      	if ( parked.isempty() )
			 {	cout<<"Parking Empty\n";}
			else
			 {	removecarparked(parked,waitin);}
			break;
		case 3:
			parked.display();
			break;
		case 4:
			if ( parked.isempty() )
			{	cout<<"Parking Empty\n";	}
			else
			{	cout<<"Parking Full"<<endl;	}
			break;
		case 5:
        	if ( parked.isempty() )
				cout<<"Parking Empty\n";
			else
	  			parked.search();
			break;
      case 6:
			x = waitin.dequeue();
         if(x != "")
         cout<<"car removed from waiting queue.";
   		break;
	 		}
	}while ( choice!= 7);

	getche();
	return 0;
}

void entercar(carPark& parked,carPark& waitin)
{
   string lp;
	if(parked.counter > 9)
   {
	   cout<<"\nCannot be parked. Parking area full. Adding to waiting queue.";
	  	if(waitin.counter<10)
      {
	      cout<<"\nEnter License Plate number:";
         cin>>lp;
	 		waitin.enqueue(lp);
         cout<<"\nCar in waiting queue.";
      }
   	else
	   	cout<<"\n Waitin queue full. cannot fulfil request yet.";
   }
  	else
   {
      cout<<"\n\n Enter License Plate number: ";
      cin>>lp;
      parked.enqueue(lp);
		cout<<"Car added to parking lot";
    }
}

void removecarparked(carPark& parked, carPark& waitin)
{

   int x;
   string lpremoved;
   carPark temp;

   cout<<"\n Enter numb of car to be removed..";
   cin>>x;

   if(x>parked.counter)
   	cout<<"Parking space empty already.";
   else
   {
   for(int j=0;j<parked.counter + 1;j++)
	  	{
   	   if( j == x-1)
		  		lpremoved = parked.dequeue();
		  	else
   	   {
			//	cout<<"\n moving car"<<j + 1;
				parked.enqueue(parked.dequeue());
			}
	   }
      cout<<"Car Removed.";
	   while (waitin.counter>0 && parked.counter<10)
	   {
	   	parked.enqueue(waitin.dequeue());
      	cout<<"\n Waitin car added to parking lot";
   	}
   }
}
