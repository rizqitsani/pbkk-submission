using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace HelloXamarin
{
    public partial class MainPage : ContentPage
    {
        int count = 0;

        public MainPage()
        {
            InitializeComponent();
        }

        void Handle_ButtonClick(object sender, System.EventArgs e)
        {
            count++;
            label.Text = $"You clicked {count} times.";
        }
    }
}
