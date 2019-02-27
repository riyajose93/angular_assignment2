using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(aspdemo.Startup))]
namespace aspdemo
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
