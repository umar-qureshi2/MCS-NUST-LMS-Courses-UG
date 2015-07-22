#include <iostream>
#include <conio>

main()
{
int arr[6][6];
cout<<"\tDISTANCE CHART"<<endl;

//---------------input
for(int i=0;i<6;i++)
{
	cout<<"\nEnter Distances from City "<<(i+1)<<":\n";
	for(int j=0; j<6;j++)
	{
		cout<<"Enter Distance to City "<<(j+1)<<" :";
		cin>>arr[i][j];
	}
}

/////////// output
cout<<"\tDisplaying Chart\n\tCity 1\tCity 2\tCity 3\tCity 4\tCity 5\tCity 6\n";
for(int x=0;x<6;x++)
{
	cout<<"City"<<(x+1)<<"\t";
	for(int y=0;y<6;y++)
   	cout<<arr[x][y]<<"\t";
   cout<<endl;
}
getche();
return 0;
}
