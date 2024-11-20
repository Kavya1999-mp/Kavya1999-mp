#include<stdio.h>
#include<conio.h>
#define SIZE 5
int stack[SIZE];
int top=-1;
void Push();
void Pop();
void main()
{
 int ch;
 clrscr();
 while(1)
 {
 printf("stack manu");
 printf("\n 1.push \n 2.pop \n 3.exit");
 printf("\n enter your choice:");
 scanf("%d",&ch);
 switch(ch)
  {
   case 1:
     Push();
     break;
   case 2:
     Pop();
     break;
   case 3:
     exit(0);
   default:
     printf("worng choice");
  }
  getch();
 }
}
void Push()
{
  int n;
  if(top==SIZE-1)
  {
   printf("stack is overflow");
   return;
  }
  printf("stack pushed element is:");
  scanf("%d",&n);
  top++;
  stack[top]=n;

}
void Pop()
{
 if(top==-1)
  {
   printf("stack is empty");
   return;
  }
  else
  {
   printf("stack is popped: %d",stack[top]);
   top--;
 }
}
