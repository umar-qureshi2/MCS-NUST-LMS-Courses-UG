#include<iostream>
#include<conio>
#include<iomanip>
int main()
{
int s=0;
int res[4]={15,10,5,8};
int claim[4][4]={6,4,1,4,5,2,1,6,2,1,2,1,3,3,3,1};
int alloc[4][4];
int c_minus_a[4][4];
int ava[4];
cout<<setw(10)<<"RESOURSE MATRIX\n\n";
cout<<setw(10)<<"R1"<<setw(10)<<"R2"<<setw(10)<<"R3"<<setw(10)<<"R4"<<endl;
for(int i=0;i<4;i++)
{
  cout<<setw(10)<<res[i];
}
cout<<endl;
cout<<endl;
//========================================================================
cout<<setw(10)<<"CLAIM MATRIX\n\n";
cout<<setw(13)<<"R1"<<setw(10)<<"R2"<<setw(10)<<"R3"<<setw(10)<<"R4"<<endl;
for(int i=0;i<4;i++)
 { cout<<"P"<<(i+1);
  for(int j=0;j<4;j++)
     {
      cout<<setw(10)<<claim[i][j];
     }
     cout<<endl;
 }
//========================================================================
for(int i=0;i<4;i++)
 {
 cout<<"\nEnter resourses for process "<<(i+1)<<endl;
  for(int j=0;j<4;j++)
     {
      cout<<"Resourse "<<(j+1)<<endl;
      cin>>alloc[i][j];
      if(alloc[i][j]>claim[i][j])
        {
          while(alloc[i][j]>claim[i][j])
          {cout<<"you can not allocate more then you claim : Re enter\n";
          cin>>alloc[i][j];}
        }
     }
 }
//==============================================================
cout<<setw(10)<<"ALLOCATION MATRIX\n\n";
cout<<setw(13)<<"R1"<<setw(10)<<"R2"<<setw(10)<<"R3"<<setw(10)<<"R4"<<endl;
for(int i=0;i<4;i++)
 { cout<<"P"<<(i+1);
  for(int j=0;j<4;j++)
     {
      cout<<setw(10)<<alloc[i][j];
     }
     cout<<endl;
 }
//========================================================================
//=============================================================

for(int i=0;i<4;i++)
 {

  for(int j=0;j<4;j++)
     {

      c_minus_a[i][j]=claim[i][j]-alloc[i][j];
     }
     cout<<endl;
 }
//===========================================================
cout<<setw(10)<<"C-A MATRIX\n\n";
cout<<setw(13)<<"R1"<<setw(10)<<"R2"<<setw(10)<<"R3"<<setw(10)<<"R4"<<endl;
for(int i=0;i<4;i++)
 { cout<<"P"<<(i+1);
  for(int j=0;j<4;j++)
     {
      cout<<setw(10)<<c_minus_a[i][j];
     }
     cout<<endl;
 }
//======================================================================
for(int i=0;i<4;i++)
 {s=0;
  for(int j=0;j<4;j++)
     {
        s=s+alloc[j][i]   ;
     }
     ava[i]=res[i]-s;
    if(ava[i]<0)
       {ava[i]=0;} 
 }
//=======================================================================
cout<<endl;
cout<<setw(10)<<"AVAILABLE MATRIX\n\n";
cout<<setw(10)<<"R1"<<setw(10)<<"R2"<<setw(10)<<"R3"<<setw(10)<<"R4"<<endl;
for(int i=0;i<4;i++)
{
  cout<<setw(10)<<ava[i];
}
//========================================================================
int p1=0;
int p2=0;
int p3=0;
int p4=0;

for(int j=0;j<4;j++)
  {
   if(c_minus_a[0][j]<=ava[j])
   p1++;

  }
for(int j=0;j<4;j++)
  {
   if(c_minus_a[1][j]<=ava[j])
   p2++;
  }
for(int j=0;j<4;j++)
  {
   if(c_minus_a[2][j]<=ava[j])
   p3++;
  }
for(int j=0;j<4;j++)
  {
   if(c_minus_a[3][j]<=ava[j])
   p4++;
  }

if(p1==4)
cout<<"\nSAFE STATE : PROCESS 1 CAN EXCECUTE /n";
else if(p2==4)
cout<<"\nSAFE STATE : PROCESS 2 CAN EXCECUTE /n";
else if(p3==4)
cout<<"\nSAFE STATE : PROCESS 3 CAN EXCECUTE /n";
else if(p4==4)
cout<<"\nSAFE STATE : PROCESS 4 CAN EXCECUTE /n";
else
cout<<"\nUNSAFE STATE : NO PROCESS CAN EXCECUTE /n";

getch();
return 0;
}
