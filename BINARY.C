#include<stdio.h>
#include<conio.h>
struct TreeNode
{
 struct TreeNode *lchild;
 int data;
 struct TreeNode *rchild;
}
int main()
{
 int a[100],i,n,item;
 clrscr();
 {
 printf("\n enter number of elements in data list:");
 scanf("%d",&n);
 for(i=0;i<n;i++)
  scanf("%d",&a[i]);
 for(i=0;i<n;i++)
  TreeInsert(&root,a[i]);
 printf("\n inorder travesrsal \n");
  inorder(root);
 printf("\n preorder traversal \n");
  preorder(root);
 printf("\n postorder traversal \n");
  postorder(root);
 printf("\n enter the item to the deleted=");
  scanf("%d",&item);
  TreeDelete(&root,item);
 printf("\n Binary tree after deletetion:\n");
 TreeDisplay(root,1);
 }
 getch();
}
TreeInsert(TreeNode **rt,int item)
{
 TreeNode *current=(*rt),*temp;
 if((*rt)==NULL)
 {
  (*rt)=getnode();
  (*rt)->data=item;
  (*rt)->lchild=NULL;
  (*rt)->rchild=NULL;
  return;
 }
 while(current!=NULL)
 {
  if(item<current->data)
  {
   if(current->lchild!=NULL)
    current=current->lchild;
   else
   {
    temp=getnode();
    current->lchild=temp;
    temp->data=item;
    temp->rchild=NULL;
    temp->lchild=NULL;
    return;
   }
  }
  else
  {
   if(item>current->data)
   {
    if(current->rchild!=NULL)
     current=current->rchild;
    else
    {
     temp=getnode();
     current->rchild=temp;
     temp->data=item;
     temp->rchild=NULL;
     return;
    }
   }
   else
   {
    printf("worng data...");
     exit(0);
   }
  }
 }
}
